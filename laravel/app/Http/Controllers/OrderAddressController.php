<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderAddressRequest;
use App\Http\Requests\UpdateOrderAddressRequest;
use App\Repositories\OrderAddressRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\OrderAddress;

class OrderAddressController extends AppBaseController
{
    /** @var  OrderAddressRepository */
    private $orderAddressRepository;

    public function __construct(OrderAddressRepository $orderAddressRepo)
    {
        $this->orderAddressRepository = $orderAddressRepo;
    }

    /**
     * Display a listing of the OrderAddress.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderAddresses = $this->orderAddressRepository->all();

        return view('order_addresses.index')
            ->with('orderAddresses', $orderAddresses);
    }

    /**
     * Show the form for creating a new OrderAddress.
     *
     * @return Response
     */
    public function create()
    {
        return view('order_addresses.create');
    }

    /**
     * Store a newly created OrderAddress in storage.
     *
     * @param CreateOrderAddressRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderAddressRequest $request)
    {
        $input = $request->all();

        $orderAddress = $this->orderAddressRepository->create($input);

        Flash::success('Order Address saved successfully.');

        return redirect(route('orderAddresses.index'));
    }

    /**
     * Display the specified OrderAddress.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return OrderAddress::with(['order'])->findOrFail($id);

        
    }

    /**
     * Show the form for editing the specified OrderAddress.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderAddress = $this->orderAddressRepository->find($id);

        if (empty($orderAddress)) {
            Flash::error('Order Address not found');

            return redirect(route('orderAddresses.index'));
        }

        return view('order_addresses.edit')->with('orderAddress', $orderAddress);
    }

    /**
     * Update the specified OrderAddress in storage.
     *
     * @param int $id
     * @param UpdateOrderAddressRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderAddressRequest $request)
    {
        $orderAddress = $this->orderAddressRepository->find($id);

        if (empty($orderAddress)) {
            Flash::error('Order Address not found');

            return redirect(route('orderAddresses.index'));
        }

        $orderAddress = $this->orderAddressRepository->update($request->all(), $id);

        Flash::success('Order Address updated successfully.');

        return redirect(route('orderAddresses.index'));
    }

    /**
     * Remove the specified OrderAddress from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderAddress = $this->orderAddressRepository->find($id);

        if (empty($orderAddress)) {
            Flash::error('Order Address not found');

            return redirect(route('orderAddresses.index'));
        }

        $this->orderAddressRepository->delete($id);

        Flash::success('Order Address deleted successfully.');

        return redirect(route('orderAddresses.index'));
    }
}
